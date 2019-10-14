import { fetchPledges } from '@/api';

const getPledges = (context) => {
  fetchPledges
    .then((response) => {
      context.commit('PLEDGES_UPDATED', response);
    })
    .catch((error) => {
      // eslint-disable-next-line
      console.error(error);
    });
};

export default {
  getPledges,
};
