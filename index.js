panel.plugin("kiah/accordion-block", {
  blocks: {
    accordion: `
      	<div @dblclick="open">
		    <template v-if="content.accordion.length === 0">
		    	<details open><summary>Details</summary>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</details>
		    </template>
		    <template v-else>
		        <details open v-for="item in content.accordion">
		        <summary v-if="item.summary">{{ item.summary }}</summary>
		        <summary v-else>Details</summary>
		        {{ item.details }}
		        </details>
		    </template>
		</div>
    `
  }
});