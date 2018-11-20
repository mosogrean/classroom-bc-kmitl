let date1 = "18/11/61"
let startTime1 = 9.00
let endTime1 = 12.00

let date2 = "18/11/61"
let startTime2 = 13.00
let endTime2 = 14.00

let date3 = "18/11/61"
let startTime3 = 15.00
let endTime3 = 16.00

const date_match = (date1 === date2)||(date1 === date3)||(date2 === date3)
const time_match = (startTime1 < endTime1)&&(startTime2 < endTime2)&&(startTime3 < endTime3)
const time1_match = (startTime1 <= startTime2) && (endTime1 >= startTime2)
const time2_match = (startTime1 >= startTime2) && (startTime1 <= endTime2)
const time3_match = (startTime1 <= startTime3) && (endTime1 >= startTime3)
const time4_match = (startTime1 >= startTime3) && (startTime1 <= endTime3)
const time5_match = (startTime2 <= startTime3) && (endTime2 >= startTime3)
const time6_match = (startTime2 >= startTime3) && (startTime2 <= endTime3) 


if (time_match){
    if (date_match && (time1_match || time2_match || time3_match || time4_match || time5_match || time6_match) ) {
        console.error("no match");
    } else {
        console.log("match");
    }
} else {
    console.error("error");
}
