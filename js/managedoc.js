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
        $.ajax({
            type: "POST",
            url: "",
            data: {
                mamh: tds[0].innerText,
                title: tds[1].innerText,
                basic: tds[2].innerText,
                intermediate1: tds[3].innerText,
                intermediate2: tds[4].innerText,
                advance: tds[5].innerText
            },
            dataType: "text",
            success: function() {
                alert(" Lưu thay đổi thành công");
            }
        })
    }
})