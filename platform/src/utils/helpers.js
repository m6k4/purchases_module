export const hParseToFilterCriteriaObjectRequiredByApi = (filterCriteria) => {
  const parsedFilterCriteria = {};

  Object.keys(filterCriteria).forEach((item) => {
    parsedFilterCriteria[item] = filterCriteria[item].value;
  });

  return parsedFilterCriteria;
};

export const hObjectIsEmpty = obj => Object.keys(obj).length === 0;
