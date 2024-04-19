new DataTable("#myDataTable");


window.addEventListener("load", function () {

    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    };

    // var options = {
    //     filebrowserImageBrowseUrl: 'http://furniz.test/admin/file-manager?type=Images',
    //     filebrowserImageUploadUrl: 'http://furniz.test/admin/file-manager/upload?type=Images&_token=',
    //     filebrowserBrowseUrl: 'http://furniz.test/admin/file-manager?type=Files',
    //     filebrowserUploadUrl: 'http://furniz.test/admin/file-manager/upload?type=Files&_token='
    // };

    CKEDITOR.replace("content", options)
});

document.querySelector(".myTable").addEventListener("submit", function (e) {
    e.preventDefault();

    const target = e.target;

    if (target.classList.contains("form-delete")) {
        if (confirm("ban co chac chan muon xoa khong?")) {
            target.submit();
        }
    }
});

document.addEventListener("click", function (e) {
    // const target = e.target;
    // e.preventDefault();

    // if (target.classList.contains("form-delete")) {
    //     if (confirm("ban co chac chan muon xoa khong?")) {
    //         target.submit();
    //     }
    // }

    // if (target.classList.contains('btn-delete')) {
    //   target.querySelector('form').submit();
    // } else if (target.classList.contains('btn-delete-icon')) {
    //   target.nextElementSibling.submit();
    // }
});


