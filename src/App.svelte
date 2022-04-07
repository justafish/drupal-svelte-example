<script>
  import Form from './Form.svelte';
  import FormAlt from './FormAlt.svelte';
  let checked = false;
  let label;

  /* Alt */
  let altChecked;
  let altLabel;
</script>

<div class="svelte-form-override">
  <Form id="svelte-checkbox" bind:label={label}>
    <input slot="checkbox" type="checkbox" id="svelte-checkbox" bind:checked={checked} on:change={() => {
      if (checked) {
        label.classList.add('is-checked');
      }
      else {
        label.classList.remove('is-checked');
      }
    }}/>
  </Form>
</div>

<div class="svelte-form-override-alt">
  <FormAlt id="svelte-checkbox-2" on:change={() => {
    if (altChecked) {
      altLabel.classList.add('is-checked');
    }
    else {
      altLabel.classList.remove('is-checked');
    }
  }} bind:checked={altChecked} bind:label={altLabel} />
</div>

<style>
  .svelte-form-override :global(label.is-checked),
  .svelte-form-override-alt :global(label.is-checked) {
    font-weight: bold;
  }
</style>
