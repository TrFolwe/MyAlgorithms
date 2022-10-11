//JS SO COOL 😎

class Filter {
    constructor(filterData) {
        this.filterData = filterData;
    }

    dataFilter(searchFilterData) {
        let evalArray = [];
        Object.keys(searchFilterData).forEach(i => evalArray.push(`i.${i} == '${searchFilterData[i]}'`));
        return this.filterData.filter(i => eval(evalArray.join(" || ")));
    }
}

module.exports = {
    Filter
}