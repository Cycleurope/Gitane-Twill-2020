<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-inputframe label="Image FullWidth (Desktop)" name="medias.desktop_picture" > <a17-mediafield :name="fieldName('desktop_picture')" crop-context="desktop_picture" >Largeur minimal de l&#039;image : 1200px</a17-mediafield> </a17-inputframe> <a17-inputframe label="Image FullWidth (Tablette)" name="medias.tabley_picture" > <a17-mediafield :name="fieldName('tabley_picture')" crop-context="tabley_picture" >Largeur minimal de l&#039;image : 1200px</a17-mediafield> </a17-inputframe> <a17-inputframe label="Image FullWidth (Mobile)" name="medias.mobile_picture" > <a17-mediafield :name="fieldName('mobile_picture')" crop-context="mobile_picture" >Largeur minimal de l&#039;image : 1200px</a17-mediafield> </a17-inputframe> <a17-locale type="a17-textfield" :attributes="{ label: 'Label', name: fieldName('label'), type: 'text', inStore: 'value' }" ></a17-locale>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
