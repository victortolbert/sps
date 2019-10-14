<template>
  <table>
    <tr>
      <th>Type</th>
      <th>Brand</th>
      <th>Model</th>
    </tr>
    <PledgeListElement
      v-for="pledge in pledges"
      :key="pledge.id"
      :pledge="pledge"
    />
    <tr
      class="table-row__fallback"
      v-if="!pledges || pledges.length === 0"
    >
      <td colspan="3">No Pledges given</td>
    </tr>
  </table>
</template>

<script>
import PledgeListElement from './PledgeListElement';
export default {
  name: 'PledgeList',
  components: {
    PledgeListElement,
  },
  props: {
    pledges: {
      type: Array,
    },
  },
};
</script>
