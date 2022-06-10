const input = document.querySelector("#image-input");
const preview = document.querySelector("#preview");
input.addEventListener("change", e => {
    previewImages(e.target.files);
});

function previewImages(fileList) {
    const preview = document.getElementById("preview");

    while (preview.firstChild) {
        preview.removeChild(preview.lastChild);
    }

    for (let i = 0; i < fileList.length; i++) {
        if (!/\.(jpe?g|png|webp)$/.test(fileList[i].name)) {
            return console.log("invalid");
        }

        const reader = new FileReader();

        reader.addEventListener("load", () => {
            var image = new Image();
            image.height = 100;
            image.width = 100;
            image.src = String(reader.result);

            const div = document.createElement("div");
            div.style.position = "relative";
            div.style.width = "100px";
            div.style.height = "100px";
            div.style.margin = " 0 10px";
            div.style.display = "inline-block";

            const deleteBtn = document.createElement("p");
            deleteBtn.textContent = "x";
            deleteBtn.style.position = "absolute";
            deleteBtn.style.top = "0";
            deleteBtn.style.right = "0";
            deleteBtn.classList = "btn btn-danger delete-image-btn";
            deleteBtn.onclick = e => deleteImage(e);
            div.appendChild(deleteBtn);
            div.appendChild(image);

            preview.appendChild(div);
        });

        reader.readAsDataURL(fileList[i]);
    }
    function deleteImage(e) {
        let imageIndex = Array.from(preview.children).indexOf(
            e.target.parentElement
        );

        let fileChanger = new DataTransfer();
        for (var i = 0; i < input.files.length; i++) {
            if (i != imageIndex) {
                fileChanger.items.add(input.files[i]);
            }
        }
        input.files = fileChanger.files;

        preview.removeChild(preview.childNodes[imageIndex]);
    }
}
