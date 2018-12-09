
	  $(document).ready(function() {
  $("#retrieve-resources").click(function() {
    var displayResources = $("#display-resources");
    
    displayResources.text("Loading data from JSON source...");

    $.ajax({
      type: "GET",
      url: "data.json", 
      success: function(result) {
        console.log(result);
        var output =
          "<table><thead><tr><th>First</th><th>Last</th><th>DOB</th><th>Gender</th><th>Email</th><th>Degree</th><th>Department</th><th>Phone</th></thead><tbody>";
        for (var i in result) {
          output +=
            "<tr><td>" +
            result[i].first +
            "</td><td>" +
            result[i].last +
            "</td><td>" +
            result[i].dob +
            "</td><td>" +
            result[i].gender +
            "</td><td>"+
			result[i].email+
			"</td><td>"+
			result[i].deg+
			"</td><td>"+
			result[i].department+
			"</td><td>"+
			result[i].phone+
			"</td></tr>";
        }
        output += "</tbody></table>";

        displayResources.html(output);
        $("table").addClass("table");
      }
    });
  });
});
