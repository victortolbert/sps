const pledges = state => state.pledges;

const pledge = state => id => {
  return state.pledges.find(pledge => pledge.id == id)
}

export default {
  pledges,
  pledge
};
