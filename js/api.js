  // Fetch Statistics
  fetch('https://bht.bet/api/dzWJjyef5PIbA1nMjQPW2KTTy1gfqUiw/stats')
      .then(response => response.json())
      .then(data => {
          // Update slot name and payout with retrieved data
          document.getElementById('date').textContent = data.date.split(' ')[0];
          document.getElementById('bonuses').textContent = data.total_bonuses;
          document.getElementById('start-balance').textContent = data.payout;
          document.getElementById('end-balance').textContent = data.total_win;
          document.getElementById('avg-bet').textContent = data.avg_betsize;
          document.getElementById('avg-x').textContent = data.avg_multi;
      })
      .catch(error => console.log(error));



  // Make a request to the API to get the list of hunts
  fetch('https://bht.bet/api/dzWJjyef5PIbA1nMjQPW2KTTy1gfqUiw/hunts')
      .then(response => response.json())
      .then(data => {
          // Find the highest id from the list of hunts
          const highestId = Math.max(...data.map(hunt => hunt.id));

          // Generate the new API URL with the highest id
          const apiUrl = `https://bht.bet/api/dzWJjyef5PIbA1nMjQPW2KTTy1gfqUiw/hunts/${highestId}`;

          // Make a request to the new API URL to get the info_start_cost value
          fetch(apiUrl)
              .then(response => response.json())
              .then(data => {
                  // Set the text content of the start-balance element to the info_start_cost value
                  document.getElementById('start-balance').textContent = data.info_start_cost;
                  document.getElementById('bonushunt-name').textContent = data.name;
              });
      });

  // Fetch HighestMulti from API
  fetch('https://bht.bet/api/dzWJjyef5PIbA1nMjQPW2KTTy1gfqUiw/best-payout')
      .then(response => response.json())
      .then(data => {
          // Update slot name and payout with retrieved data
          document.getElementById('slot-name').textContent = data.slot_name;
          document.getElementById('slot-name1').textContent = data.slot_name;
          document.getElementById('payout').textContent = data.payout;
          document.getElementById('multiplier').textContent = data.multiplier;
      })
      .catch(error => console.log(error));