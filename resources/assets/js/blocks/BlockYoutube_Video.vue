<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="URL de la vidéo Youtube" :name="fieldName('video_url')" type="text" in-store="value" ></a17-textfield><a17-inputframe label="Miniature vidéo" name="medias.video_thumbnail" > <a17-mediafield :name="fieldName('video_thumbnail')" crop-context="video_thumbnail" >Largeur minimale de l&#039;image : 1200px</a17-mediafield> </a17-inputframe> <a17-inputframe label="Titre de la vidéo" name="medias.video_title" > <a17-mediafield :name="fieldName('video_title')" crop-context="video_title" ></a17-mediafield> </a17-inputframe> <a17-inputframe label="Image de fond" name="medias.background_image" > <a17-mediafield :name="fieldName('background_image')" crop-context="background_image" >Largeur minimale de l&#039;image : 1200px</a17-mediafield> </a17-inputframe> 
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
