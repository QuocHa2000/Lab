$(".delete").click(async function() {
    let delval = $(this).closest("tr").children(':first-child').text();
    let tr = $(this).closest("tr");
    await $.ajax({
        type: "POST",
        url: "",
        data: {
            del: delval
        },
        dataType: "text",
        success: function() {
            tr.hide("slow");
            alert("Xóa nội dung thành công")
        },
    })

})

$('.update').click(function() {
    if ($(this).text() == 'Sửa') {
        let tds = $(this).closest('tr').children();
        for (let i = 1; i < tds.length - 1; i++) {
            tds[i].contentEditable = true;
        }
        $(this).text('Lưu Thay Đổi');
    } else {
        let tds = $(this).closest('tr').children();
        $(this).text("Sửa");
        for (let i = 1; i < tds.length - 1; i++) {
            tds[i].contentEditable = false;
        }
        for (var i = 0; i < tds.length; i++) {
            console.log(tds[i].innerText);
        }
        $.ajax({
            type: "POST",
            url: "",
            data: {
                mamh: tds[0].innerText,
                tenmh: tds[1].innerText,
                tieude: tds[2].innerText,
                noidung: tds[3].innerText,
                anh: tds[4].innerText,
                ref: tds[5].innerText
            },
            dataType: "text",
            success: function() {
                alert(" Lưu thay đổi thành công");
            }
        })
    }
})