new DataTable("#myDataTable");

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
