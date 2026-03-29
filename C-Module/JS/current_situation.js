// json 데이터
let jsonData = [];
fetch("../../RES/C/도서관현황.json")
.then(res => res.json())
.then(data => {
    jsonData = data;
    div();
})


function div() {
    let sum = 0;
    jsonData.forEach((item, index) => {
        if (item.시도명 === '인천광역시') {
            sum += item.열람좌석수;
        }
    })
    console.log(sum);
}