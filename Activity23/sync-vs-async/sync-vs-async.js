// Synchronous function (blocking)
function syncFunction() {
    console.log("Synchronous function starts");
  
    for (let i = 0; i < 1000000000; i++) {
      // 模拟耗时的同步操作
    }
  
    console.log("Synchronous function ends");
  }
  
  // Asynchronous function (non-blocking)
  function asyncFunction() {
    console.log("Asynchronous function starts");
  
    setTimeout(() => {
      console.log("Asynchronous function ends (after 2 seconds)");
    }, 2000);
  }
  
  // Start execution
  console.log("Start of the program");
  
  syncFunction();
  asyncFunction();
  
  console.log("End of the program");
  