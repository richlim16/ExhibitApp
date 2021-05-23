
const imgPrev = document.getElementById("img-prev");
const chooseFile = document.getElementById("choose-file");

function getImgData() {
    const files = chooseFile.files[0];

    if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
            imgPrev.style.display = "block";
            imgPrev.innerHTML = '<img src="' + this.result + '" id="img"/>';
        });
    }
}

chooseFile.addEventListener("change", function () {
    getImgData();
});

function fileup() {
    document.getElementById("choose-file").click();
}