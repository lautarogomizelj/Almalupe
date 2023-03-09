function datetime1(){
    var date = new Date();
  
    var hour = date.getHours();
    var minutes = date.getMinutes();
    var seconds = date.getSeconds();
  
    if (hour <= 9){var hour_1 = "0" + hour} else{hour_1 = hour};
    // if (hour >= 0 && hour < 12){var horario1 = "AM"}else{horario1 = "PM"}
    if (minutes <= 9){var minutes_1 = "0" + minutes} else{minutes_1 = minutes};
    if (seconds <=9){var seconds_1 = "0" + seconds} else{seconds_1 = seconds}
  
    hour_1 = hour_1 + ":";
    minutes_1 = "" + minutes_1 + "";
    seconds_1 = ":" + seconds_1;
  
    document.getElementById('hora').innerHTML = hour_1;
    document.getElementById('minutos').innerHTML = minutes_1;
    document.getElementById('segundos').innerHTML = seconds_1;
    // document.getElementById('horario').innerHTML = horario1;
  }
  
  setInterval(datetime1, 1000);
  
  