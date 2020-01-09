<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-repeater type="feature_item" :name="repeaterName('feature_item')" ></a17-repeater>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
