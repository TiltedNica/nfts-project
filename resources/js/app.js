import {Dropzone} from "dropzone";

Dropzone.autoDiscover = false;

if (document.getElementById('dropzone')) {
    const dropzone = new Dropzone('#dropzone', {
        dictDefaultMessage: 'Upload File',
        acceptedFiles: '.png,.jpg,.jpeg,.gif',
        addRemoveLinks: true,
        dictRemoveFile: 'Delete File',
        maxFiles: 1,
        uploadMultiple: false,

        init: function (){
            if (document.querySelector('[name="img_item"]').value.trim()){
                const postedImage = {}
                postedImage.size = 1234
                postedImage.name=document.querySelector('[name="img_item"]').value;
                this.options.addedfile.call(this, postedImage);
                this.options.thumbnail.call(this, postedImage, `/uploads/${postedImage.name}`)

                postedImage.previewElement.classList.add("dz-success", "dz-complete")
            }

            this.on("addedfile", function (file) {
                let reader = new FileReader();
                reader.onload = function (event) {
                    let imagePreview = document.querySelector(".image-preview");
                    imagePreview.src = event.target.result;
                    let test = document.querySelector('.dz-remove');
                    test.style.color = 'red'
                };
                reader.readAsDataURL(file);
            });
        }
    })

    dropzone.on('success', function (file, response){
        console.log(response.img_item)
        document.querySelector('[name="img_item"]').value = response.img_item;
    })

    dropzone.on('removedfile', function (){
        document.querySelector('[name="img_item"]').value = "";
        let imagePreview = document.querySelector(".image-preview");
        imagePreview.src = "https://openseauserdata.com/files/3d825b936774e0ae3c8247613c91d436.png";
    })
}


const inputTitle = document.querySelector('.title');
const titleBox = document.querySelector('.print-title');
const inputPrice = document.querySelector('.price');
const titlePrice = document.querySelector('.print-price');

titleBox.innerHTML = 'Title'
inputTitle.addEventListener('keyup', function (){
    titleBox.innerHTML = inputTitle.value !== '' ? inputTitle.value : 'Title';
})

titlePrice.innerHTML = '4.89'
inputPrice.addEventListener('keyup', function (){
    titlePrice.innerHTML = inputPrice.value !== '' ? inputPrice.value : '4.89';
})


// if (value === ""){
//     inputTitle.addEventListener('keyup', function (){
//         titleBox.innerText = inputTitle.value
//     })
// } else if (titleBox.innerText === "") {
//     titleBox.innerText = "Title"
// }


