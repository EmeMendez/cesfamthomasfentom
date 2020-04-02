<template>
        <div>
            <div class="form-group row">
            <label for="images" class="col-sm-2 col-form-label">Galería</label>
            <div class="col-sm-10">
                <div class="form-group" id="images">
                <input  @change="loadImages" type="file" name="images[]" id="images_post" multiple class="form-control-file">
                </div>  
            </div>
            </div>

            <div class="form-group row">
            <label for="galery" class="col-sm-2 col-form-label">Galería</label>
            <div class="col-sm-10">
                <div class="form-group" id="galery">
                
                         
                    <img v-for="(image, index) in post_images" :key="'img'+ index" :src="'/'+ image.path" class="py-3 mr-2" width="150" height="120" alt="">
                    
                    <img v-for="(temporal_image, index_temporal) in images_path" :key="'ti'+ index_temporal" :src="temporal_image" class="py-3 mr-2" width="150" height="120" alt=""> 

                </div>  
            </div>
            </div>           
        </div>     
</template>

<script>
    export default {
        data(){
            return {
                post_images: [],
                temporal_images: [] ,
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
                axios.get('/admin/posts/'+id[0]+'/images').then(res =>{
                    this.post_images = res.data 
                });
                }catch(error){
                    //means the route is create
                    this.empty = true;
                }
            },
            loadImages(){
                var files = document.getElementById("images_post").files;       
                this.temporal_images = [];
                    for (let file of files) {
                        let img = new Image;
                        img.src = URL.createObjectURL(file);
                        img.title = file.name;
                        this.temporal_images.push(img.src);
                    }     
     }     


        
        },
        computed:{

            images_path(){
                return this.temporal_images;
            }
        }                
    }

    
</script>