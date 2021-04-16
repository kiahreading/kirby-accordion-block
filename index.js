panel.plugin("kiah/annotator-block", {
  blocks: {
    annotator: {
    	computed: {
		    captionMarks() {
		      return this.field("caption", { marks: true }).marks;
		    },
		    src() {
		      if (this.content.location === "web") {
		        return this.content.src;
		      }
		      if (this.content.image[0] && this.content.image[0].url) {
		        return this.content.image[0].url;
		      }
		      return false;
		    },
		  },
    	template: `
      	<k-block-figure
		    :caption="content.caption"
		    :caption-marks="captionMarks"
		    :empty-text="$t('field.blocks.image.placeholder') + ' …'"
		    :is-empty="!src"
		    empty-icon="image"
		    @open="open"
		    @update="update"
		  >
		    <template>
		      <img
		        :alt="content.alt"
		        :src="src"
		        class="k-block-type-image-auto"
		      >
		    </template>
		</k-block-figure>
    `
    }
  }
});