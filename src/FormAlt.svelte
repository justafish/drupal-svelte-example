<script>
  let id;
  export let checked = false;
  export let label;
</script>

<form>
  <slot name="label">
    <label bind:this={label} for={id}>Label</label>
  </slot>
  <slot name="checkbox">
    <input bind:checked={checked} on:change type="checkbox" id={id} />
  </slot>
</form>
