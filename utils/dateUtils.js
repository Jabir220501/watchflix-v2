const getYearFromDate = (dateString) => {
  const year = dateString.substring(0, 4);
  return year;
};

export default getYearFromDate;
