// ◯年◯月◯日を出力するjs
let now = new Date();
    function LoadProc() {
      const target = document.getElementById("DateTimeYMD");

      let Year = now.getFullYear();
      let Month = now.getMonth()+1;
      let Date = now.getDate();
    //   let Hour = now.getHours();
    //   let Min = now.getMinutes();
    //   let Sec = now.getSeconds();

      target.innerHTML = Year + "年" + Month + "月" + Date + "日";
}
