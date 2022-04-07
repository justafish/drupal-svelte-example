<script>
  let id;
  export let label;
</script>

<form>
  <slot name="label">
    <label bind:this={label} for={id}>Label</label>
  </slot>
  <slot name="checkbox">
    <input type="checkbox" id={id} />
  </slot>
</form>
