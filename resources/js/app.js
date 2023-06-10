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
        }
    })

    dropzone.on('success', function (file, response){
        console.log(response.img_item)
        document.querySelector('[name="img_item"]').value = response.img_item;
    })

    dropzone.on('removedfile', function (){
        document.querySelector('[name="img_item"]').value = "";
    })
}
