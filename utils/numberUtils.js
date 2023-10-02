const roundToOneDecimalPlace = (number) => {
  const roundedNumber = Math.round(number * 10) / 10;
  return roundedNumber;
};

export default roundToOneDecimalPlace;
