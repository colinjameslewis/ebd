// CUSTOM SITE JS


// HOME HERO BANNER typed.js     

  $("#home-typed").typed({
        strings: ["We build relationships"],
        typeSpeed: 25,
        backSpeed: 0,
        showCursor: false,
        backDelay: 2000

              // function() {

          
              //  // check string position
              //  // if last string, set backDelay to 10 seconds
              //  if (self.arrayPos == 4){
              //    10000
              //  }
              //  // otherwise, set to 3 seconds
              //  else {
              //    3000
              //  }
              // }
      });

    // TIME = milliseconds from 1/1/1970 00:00:00 to datetime of page load

    // Set date of stats extraction
    var counterStartDateString  = new Date( "March 20, 2016 00:00:00" );
    // Get TIME of stats extraction date
    var counterStartDate = counterStartDateString.getTime();
    // Get TIME of actual page load
    var counterActualDate  = Date.now();
    // Resolve difference between TIME of stats extraction to actual TIME of page load
    var counterDifferential  = counterActualDate - counterStartDate;

    // Get time value for 2 years ACTUAL
      // Set Date string to 2 ACTUAL years before stat extraction
      var twoYearDateString = new Date( "March 20, 2014 00:00:00" );
      // Get TIME for 2 ACTUAL years 
      var twoYearDate = twoYearDateString.getTime();
        // Total hours ACTUAL
        var twoYearActual = counterStartDate - twoYearDate;

      

    // Set stats variables for last 2 years WORKED
      // Total hours WORKED
      var twoYearHoursWorked = 57549.25;
        // Resolve Total hours worked to minutes worked
        var twoYearMinutesWorked = twoYearHoursWorked * 60;
          // Resolve Total minutes worked to seconds worked
          var twoYearSecondsWorked = twoYearMinutesWorked * 60;
            // Resolve Total seconds worked to milliseconds worked
            var twoYearWorked = twoYearSecondsWorked * 1000;

      // Get ACTUAL two year count rate multiplier
        // Divide WORKED by ACTUAL
        var countRateActual = twoYearWorked / twoYearActual;


        

        // Total calls 
        var twoYearCalls = 601085;
        // Total unique DMs engaged
        var twoYearDM = 47768;
        // Total appointments set
        var twoYearAppt = 8323;


    var callCountRate = ( twoYearCalls / twoYearWorked ) * countRateActual;
    var dmCountRate = ( twoYearDM / twoYearWorked ) * countRateActual;
    var apptCountRate = ( twoYearAppt / twoYearWorked ) * countRateActual;

    

    // Set the base value for a statistic as recorded on stats extraction date

    var baseCalls = 2528299;
    var baseDM    = 200449;
    var baseAppt  = 34925;

    var actualCalls = baseCalls + (counterDifferential * callCountRate);
    var actualDM = baseDM + (counterDifferential * dmCountRate);
    var actualAppt = baseAppt + (counterDifferential * apptCountRate);

    // Resolve the real rate of increase for a statistic

    // Resolve the actual statistic value
      // Base value of stat + (Real rate of stat increase * Time difference between stat extraction and page load)


    // set separator value or counts over 1000
    var options = { separator : ',' };
    // create new counters with params( "id", startValue, endValue, startDelay, timeElapse, options )
    var callCounter = new CountUp("callCounter", baseCalls, actualCalls, 0, 2.0, options);
    var dmCounter = new CountUp("dmCounter", baseDM, actualDM, 0, 2.5, options);
    var apptCounter = new CountUp("apptCounter", baseAppt, actualAppt, 0, 3.0, options);
    

    function startCounters() {
      // on page load, slide the metric panels into view  
      $("#home-metrics-banner").slideDown();

        // start each metric counter
          callCounter.start();
          dmCounter.start();
          apptCounter.start();

          
    }
        
    $(window).scroll(startCounters);   

  
    
    

