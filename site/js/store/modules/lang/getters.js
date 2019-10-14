import lang from ".";

const pledges = state => state.pledges;

const trans = state => key => {
  Lang.setLocale(state.lang);
  return Lang.get(key);
},

export default {
  pledges,
  pledge
};
