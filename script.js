//preloader handler
var preloader = document.getElementById('preloader')
setTimeout(function(){
    preloader.style.display = "none"
  },1000)

//  *************  FETCH API -> covid tracking fetch api *************
var postive_case = negative_case = isolation = recovered = deaths = count1 = count2 = count3 = count4 = count5 = 0
var pos1 = pos2 = pos3 = pos4 = pos5 = null

//postive case
function displayPositive(){
  if(count1 > postive_case){
    clearInterval(pos1)
    document.querySelector(".main .row #data #cases .col-sm-4 #postive_case").innerHTML = postive_case
  }else{
    document.querySelector(".main .row #data #cases .col-sm-4 #postive_case").innerHTML = count1
  }
  count1 += 100
}

//negative case
function displayNegative(){
  if(count2 > negative_case){
    clearInterval(pos2)
    document.querySelector(".main .row #data #cases .col-sm-4 #negative_case").innerHTML = negative_case
  }else{
    document.querySelector(".main .row #data #cases .col-sm-4 #negative_case").innerHTML = count2
  }
  count2 += 400
}

//isolation
function displayIsolation(){
  if(count3 > isolation){
    clearInterval(pos3)
    document.querySelector(".main .row #data #cases .col-sm-4 #isolation").innerHTML = isolation
  }else{
    document.querySelector(".main .row #data #cases .col-sm-4 #isolation").innerHTML = count3
  }
  count3 += 5
}

//recovered
function displayRecovered(){
  if(count4 > recovered){
    clearInterval(pos4)
    document.querySelector(".main .row #data #cases .col-sm-4 #recovered").innerHTML = recovered
  }else{
    document.querySelector(".main .row #data #cases .col-sm-4 #recovered").innerHTML = count4
  }
  count4 += 100
}

//deaths
function displayDeaths(){
  if(count5 > deaths){
    clearInterval(pos5)
    document.querySelector(".main .row #data #cases .col-sm-4 #deaths").innerHTML = deaths
  }else{
    document.querySelector(".main .row #data #cases .col-sm-4 #deaths").innerHTML = count5
  }
  count5 += 10
}

function getApiData(){
  // highlighted covid data on dashboard
  fetch('https://corona.askbhunte.com/api/v1/data/nepal').then((apiData) => {
    return apiData.json()
  }).then((actualData) => {
    console.log(actualData)
    postive_case = actualData.tested_positive
    negative_case = actualData.tested_negative
    deaths = actualData.deaths
    isolation = actualData.in_isolation
    recovered = actualData.recovered
    displayPositive()
    pos1 =  setInterval(displayPositive,0)
    displayNegative()
    pos2 =  setInterval(displayNegative,0)
    displayIsolation()
    pos3 =  setInterval(displayIsolation,0)
    displayRecovered()
    pos4 =  setInterval(displayRecovered,0)
    displayDeaths()
    pos5 =  setInterval(displayDeaths,0)
    localStorage.setItem("postive_case",postive_case)
    localStorage.setItem("negative_case",negative_case)
    localStorage.setItem("isolation",isolation)
    localStorage.setItem("recovered",recovered)
    localStorage.setItem("deaths",deaths)
  }).catch((error) =>{
    console.log(error)
  })

}
getApiData()

// Component handling and replacement
$(".main .row #data").css("display","block")
$(".main .row #province").css("display","none")
$(".main .row #district").css("display","none")
$(".main .row #gender").css("display","none")
$(".main .row #deaths").css("display","none")

//province button
$(".main .row #update #province_btn").click(function(){
  let on = $(".main .row #province").css("display")
  if(on == "none"){
      $(".main .row #data").css("display","none")
      $(".main .row #province").css("display","block")
      $(".main .row #district").css("display","none")
      $(".main .row #gender").css("display","none")
  }else{
      $(".main .row #data").css("display","block")
      $(".main .row #province").css("display","none")
      $(".main .row #district").css("display","none")
      $(".main .row #gender").css("display","none")
  }
})

//district button
$(".main .row #update #district_btn").click(function(){
  let on1 = $(".main .row #district").css("display")
  if(on1 == "none"){
      $(".main .row #data").css("display","none")
      $(".main .row #district").css("display","block")
      $(".main .row #province").css("display","none")
      $(".main .row #gender").css("display","none")
  }else{
      $(".main .row #data").css("display","block")
      $(".main .row #district").css("display","none")
      $(".main .row #province").css("display","none")
      $(".main .row #gender").css("display","none")
  }
})

// gender button
$(".main .row #update #gender_btn").click(function(){
  let on1 = $(".main .row #gender").css("display")
  if(on1 == "none"){
      $(".main .row #data").css("display","none")
      $(".main .row #gender").css("display","block")
      $(".main .row #province").css("display","none")
      $(".main .row #district").css("display","none")
  }else{
      $(".main .row #data").css("display","block")
      $(".main .row #gender").css("display","none")
      $(".main .row #province").css("display","none")
      $(".main .row #district").css("display","none")
  }
})

//deaths button
$(".main .row #update #deaths_btn").click(function(){
  let on1 = $(".main .row #deaths").css("display")
  if(on1 == "none"){
      $(".main .row #data").css("display","none")
      $(".main .row #deaths").css("display","block")
      $(".main .row #province").css("display","none")
      $(".main .row #district").css("display","none")
  }else{
      $(".main .row #data").css("display","block")
      $(".main .row #district").css("display","none")
      $(".main .row #province").css("display","none")
      $(".main .row #gender").css("display","none")
  }
})









