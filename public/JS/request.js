var request = new XMLHttpRequest();
request.open("GET", "/get67902128data4829category", true);

request.onload = function () {
    if (this.status >= 200 && this.status < 400) {
        // Success!
        var data = JSON.parse(this.response);

        $.each(data, function (i, data) {
            $("#navbarCategory").append(
                `<li><a class="dropdown-item" href="/posts?kategori=` +
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
