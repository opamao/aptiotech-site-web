"use strict";
var KTUsersList = (function () {
    var e,
        o = document.getElementById("kt_table_users");

    return {
        init: function () {
            if (o) {
                e = $(o).DataTable({
                    info: !1,
                    order: [],
                    pageLength: 10,
                    lengthChange: !1,
                });

                // Gestion de la recherche
                document
                    .querySelector('[data-kt-user-table-filter="search"]')
                    .addEventListener("keyup", function (t) {
                        e.search(t.target.value).draw();
                    });

                // Réinitialiser la recherche
                document
                    .querySelector('[data-kt-user-table-filter="reset"]')
                    .addEventListener("click", function () {
                        document
                            .querySelector('[data-kt-user-table-filter="form"]')
                            .querySelectorAll("select")
                            .forEach((e) => {
                                $(e).val("").trigger("change");
                            });
                        e.search("").draw();
                    });

                // Filtrer par sélection
                (() => {
                    const t = document.querySelector(
                            '[data-kt-user-table-filter="form"]'
                        ),
                        n = t.querySelector(
                            '[data-kt-user-table-filter="filter"]'
                        ),
                        r = t.querySelectorAll("select");
                    n.addEventListener("click", function () {
                        var t = "";
                        r.forEach((e, n) => {
                            e.value &&
                                "" !== e.value &&
                                (0 !== n && (t += " "), (t += e.value));
                        });
                        e.search(t).draw();
                    });
                })();
            }
        },
    };
})();
KTUtil.onDOMContentLoaded(function () {
    KTUsersList.init();
});
