$(document).ready(function () {
    $("#notif").hide();

    $("#cari").hide();

    $("#cek").click(function () {
        const inv = $("#kode_invoice").val();
        var temp;
        const data = {
            inv: inv,
        };
        $.ajax({
            url: "/cek",
            type: "POST",
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
            dataType: "json",
            data: data,
            success: function (response) {
                console.log(response);
                const proses = response[0];
                const transaksi = response[1];

                if (proses == null) {
                    temp = transaksi;
                } else if (transaksi == null) {
                    temp = proses;
                } else if (proses == null && transaksi == null) {
                    temp = null;
                }
                console.log(temp);
                show(temp);
            },
        });

        function show(temp) {
            if (temp == null) {
                $("#notif").show();
                $("#cari").hide();
            } else {
                $("#notif").hide();
                $("#cari").show();
                $("#invoice").text(temp["Invoice"]);
                $("#alamat").text(temp["alamat"]);
                if (temp["berat"] != 0) {
                    $("#Berat").text(temp["berat"]);
                } else if (temp["berat"] == 0) {
                    $("#Berat").text("Cuci Satuan");
                }

                $("#nama").text(temp["nama"]);
                $("#status").text(temp["status"]);
                $("#dibayar").text(temp["dibayar"] + " dibayar");
            }
        }
    });
});
