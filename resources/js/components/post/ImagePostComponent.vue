<template>
        <div>
            <div v-if="!empty">
            <a href="#modal_image" data-toggle="modal" data-target="#modal_image">
                <img   :src="image_path" class="mb-4" width="800" height="400" alt="">
            </a>

            <!-- Modal -->
            <div class="modal fade col-12" id="modal_image" tabindex="-1" role="dialog" aria-labelledby="modal_imageTitle" aria-hidden="true">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">  
                    <div class="text-center mx-auto">
                        <img :src="image_path" class="img-fluid rounded"  alt="">
                    </div>
                </div>
            </div>
            <!-- modal  -->
            </div>

            <div v-if="empty">
                <div class="row align-items-center bg-light mb-4" style="height:400px">
                    <div class="col-12 text-center text-secondary">
                        IMAGEN PRINCIPAL DEL POST
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-sm-2 col-form-label">Imágen Principal</label>
                <div class="col-sm-10">
                    <div class="form-group" id="image">
                        <input @change="getImage" accept=".png, .jpeg, .jpg" type="file" name="image" class="form-control-file">
                    </div>  
                </div>
            </div>
        </div>     
</template>

<script>
    export default {
        data(){
            return {
                image_url: '' ,
                imagen: '',
                empty: false               
            }
        },
        mounted(){
              this.getPostImage();   
        },
        methods:{
            getPostImage(){
                var regex = /\d+/g;
                var url = window.location.pathname
                try{
                var id = url.match(regex);
                axios.get('/admin/posts/'+id[0]+'/image').then(res =>{
                    this.image_url = '/' + res.data 
                });
                }catch(error){
                    //means the route is create
                    this.empty = true;
                }
            },
            getImage(e){
                let file = e.target.files[0]; 
                this.imagen = file;
                this.loadImage(file);
                },
            loadImage(file){
                let reader = new FileReader();
                reader.onload = (e) =>{
                    this.image_url = e.target.result;

                }
                reader.readAsDataURL(file); 
                this.empty = false; 
            }
        },
        computed:{
            image_path(){
                return this.image_url;
            }
        }                
    }

    
</script>