const convertMinutesToHoursAndMinutes = (minutes) => {
  if (typeof minutes !== "number" || isNaN(minutes)) {
    return "Invalid input";
  }

  const hours = Math.floor(minutes / 60);
  const remainingMinutes = minutes % 60;

  if (hours === 0) {
    return `${remainingMinutes} min`;
  } else if (remainingMinutes === 0) {
    return `${hours} hour${hours === 1 ? "" : ""}`;
  } else {
    return `${hours} h${hours === 1 ? "" : ""}${remainingMinutes} min`;
  }
};

export default convertMinutesToHoursAndMinutes;
