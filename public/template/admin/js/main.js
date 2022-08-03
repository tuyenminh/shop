$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function removeRom(id, url)
{
    if(confirm ('Xóa mà không thể khôi phục. Bạn có chắc ?')) {
        $.ajax({
            type: 'DELETE', 
            datatype: 'JSON',
            data: { id },
            url: url,
            succsess: function (result) {
                if (result.error === false) {
                    alert(result.message);
                    location.reload();
                }
                else {
                    alert('Xóa lỗi vui lòng thử lại');
                }
            }
        })
    }
}