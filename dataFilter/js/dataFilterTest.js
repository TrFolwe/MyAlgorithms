//TEST ALGORITHM

const {Filter} = require("./dataFilter");

const postFilterData = [{
    bookName: "Kitap1",
    bookWriter: "Yazar1",
    bookPage: 100,
    bookShelf: 5,
    bookBlok: "A",
    bookPublisher: "Yayin1"
}, {
    bookName: "Kitap2",
    bookWriter: "Yazar2",
    bookPage: 150,
    bookShelf: 6,
    bookBlok: "B",
    bookPublisher: "Yayin2"
}, {
    bookName: "Kitap3",
    bookWriter: "Yazar3",
    bookPage: 200,
    bookShelf: 7,
    bookBlok: "C",
    bookPublisher: "Yayin3"
}];

const FilterClass = new Filter(postFilterData);

console.log(FilterClass.dataFilter({bookName:"Kitap1", bookBlok:"C"}));