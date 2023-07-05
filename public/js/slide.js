const body = document.querySelector("body"),
    sidebar = body.querySelector("nav"),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

toggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

$(document).ready(function () {
    search();
    $("#opsi").on("change", function () {
        const opsi = $(this).find(":selected").val();
        console.log(opsi);
        if (opsi == "satuan") {
            $("#berat").val(0);
            $("#berat").prop("disabled", true);
        } else if (opsi == "kiloan") {
            $("#berat").prop("disabled", false);
        }
    });
    $("#ongkos").keyup(function () {
        var berat = parseInt($("#berat").val());
        var harga = parseInt($("#harga").val());
        var ongkos = parseInt($("#ongkos").val());
        var diskon = parseInt($("#diskon").val());
        var temp;
        var total;
        console.log(berat);
        if (berat == "0") {
            total = harga + ongkos;
            temp = total * (diskon / 100);
            total = total - temp;
        } else if (berat != null) {
            total = harga * berat + ongkos;
            temp = total * (diskon / 100);
            total = total - temp;
        }
        $("#total").val(total);
    });

    $("#no").keyup(function () {
        var keyword = $("#no").val();
        search(keyword);
    });

    function search(no) {
        console.log(no);
        if (no !== "") {
            const data = {
                nomer: no,
            };
            $.ajax({
                url: "/search",
                type: "POST",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
                dataType: "json",
                data: data,
                success: function (response) {
                    console.log(response); // Handle the response from the server
                    var temp, data;
                    if (response[3].length == 0 && response[2] == 0) {
                        temp = parseInt(response[0]["nomerHp"] + "0000");
                        temp = temp + (response[2] + 1);
                    } else if (response[3].length != 0 && response[2] == 0) {
                        data = response[3][response[3].length - 1]["Invoice"];
                        data = parseInt(
                            data[data.length - 2] + data[data.length - 1]
                        );
                        temp = parseInt(response[0]["nomerHp"] + "0000");
                        temp = temp + data + 1;
                    } else if (response[3].length == 0 && response[2] != 0) {
                        data = response[4][response[4].length - 1]["Invoice"];
                        data = parseInt(
                            data[data.length - 2] + data[data.length - 1]
                        );
                        temp = parseInt(response[0]["nomerHp"] + "0000");
                        temp = temp + data + 1;
                        console.log(temp);
                    } else if (
                        response[4].length != 0 &&
                        response[3].length != 0
                    ) {
                        data = response[3][response[3].length - 1]["Invoice"];
                        data = parseInt(
                            data[data.length - 2] + data[data.length - 1]
                        );
                        temp = parseInt(response[0]["nomerHp"] + "0000");
                        temp = temp + data + 1;
                    }

                    $("#kode").val("Inv" + temp);
                    $("#nama").val(response[0]["nama"]);
                    $("#alamat").val(response[0]["alamat"]);
                    $("#pegawai").val(response[1]);
                },
            });
        } else {
            $("#kode").val("");
            $("#nama").val("");
            $("#alamat").val("");
            $("#harga").val("");
            $("#pegawai").val("");
            $("#diskon").val("");
            $("#ongkos").val("");
            $("#total").val("");
        }

        // Callback handler that will be called on success
    }
});
