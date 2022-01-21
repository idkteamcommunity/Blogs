var request = new XMLHttpRequest();
request.open("GET", "/get67902128data4829category", true);

request.onload = function () {
    if (this.status >= 200 && this.status < 400) {
        // Success!
        var data = JSON.parse(this.response);

        // console.log(data);

        $.each(data, function (i, data) {
            $("#navbarCategoryList").append(
                `<li><a class="dropdown-item" href="/blog?kategori=` +
                    data.slug +
                    `">` +
                    data.name +
                    `</a></li>`
            );
        });
    } else {
        // We reached our target server, but it returned an error
    }
};

request.onerror = function () {
    // There was a connection error of some sort
};

request.send();
