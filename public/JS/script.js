for (let index = 0; index < 3; index++) {
    $("#formNavbar" + index).prepend(`
<input type="hidden" name="kategori" id="" value="">
<input type="hidden" name="urutan" id="" value="desc">`);
}
