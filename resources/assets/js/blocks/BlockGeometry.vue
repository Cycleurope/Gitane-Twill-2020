<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-textfield label="Taille" :name="fieldName('size')" type="text" in-store="value" ></a17-textfield><a17-textfield label="A" :name="fieldName('a')" type="text" in-store="value" ></a17-textfield><a17-textfield label="B" :name="fieldName('b')" type="text" in-store="value" ></a17-textfield><a17-textfield label="C" :name="fieldName('c')" type="text" in-store="value" ></a17-textfield><a17-textfield label="D" :name="fieldName('d')" type="text" in-store="value" ></a17-textfield><a17-textfield label="E" :name="fieldName('e')" type="text" in-store="value" ></a17-textfield><a17-textfield label="F" :name="fieldName('f')" type="text" in-store="value" ></a17-textfield><a17-textfield label="G" :name="fieldName('g')" type="text" in-store="value" ></a17-textfield><a17-textfield label="H" :name="fieldName('h')" type="text" in-store="value" ></a17-textfield><a17-textfield label="I" :name="fieldName('i')" type="text" in-store="value" ></a17-textfield><a17-textfield label="J" :name="fieldName('J')" type="text" in-store="value" ></a17-textfield><a17-textfield label="Wheels" :name="fieldName('wheels')" type="text" in-store="value" ></a17-textfield><a17-textfield label="Hauteur (cm)" :name="fieldName('height')" type="text" in-store="value" ></a17-textfield>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
