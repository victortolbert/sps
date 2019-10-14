<template>
  <tr>
    <td v-text="pledge.type"></td>
    <td v-text="pledge.brand"></td>
    <td v-text="pledge.model"></td>
  </tr>
</template>

<script>
export default {
  name: 'PledgeListElement',
  props: {
    pledge: {
      type: Object,
    },
  },
};
</script>
