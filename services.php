<?php include('header.php'); 

include('database.php');
include('sqlQuery.php');
$result = $conn->query($getAllProjects);

$conn->close();
?> 
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Services</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li><a href="#">Pages</a><i class="icon-angle-right"></i></li>
              <li class="active">Services</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <p>
              <h5><b>Site Consultancy</b></h5>  
            </p>
            <p>
                The consultancy procedure will provide the consumer with an essentialhigh level options appraisal of the various key considerations to address when installing a solar PV array at a particular site and whether the proposed array(s) will be building integrated or ground mounted. This study will include advice on the possible array size, electrical performance and financial payback while also identifying barriers to the scheme development. The objectives of the final report will be to: 
                <ul>
                    <li>Identify site options for potential array configurations by means of end to end site surveys and feasibility studies.
                    </li><li>Gather site specific details to enable all technical documents to be produced to complete the installation (For example, planning applications, grid connection applications, applications for finance, hardware procurement.)
                    </li><li>Identify any issues that may compromise the installation of a solar PV system or limit its performance, whether these issues are technical, financial or logistical in nature.
                    </li><li>Develop a roadmap for the particular site in order to determine how to go maximize efficiency and minimize cost whilst continually providing post installation customer support and deliver to each customer’s requirements.
                    </li><li>Maximize output by means of determining the most cost effective means of generation, storage and consumption of solar energy by laying special emphasis on the latest technological know-how available at hand.
                    </li>
                 </ul> 
            </p>
            </br>
            </br>
            <p>
                <h5><b>Design and Engineering (product engineering and design)</b></h5>  
              </p>
              <p>
                  The design phase caters to identify and implement suitable grid infrastructure based on individual site characteristics, assessment of roof conditions and taking into account a structural engineer’s report if the need be. This will further be followed up by minimizing risk factors and maximizing output by means of numerous potential solar models keeping in mind the location, scale, cost and suppliers to be called to action.  The step will include:
                  <ul>
                      <li>Liaise with building control through the design process to ensure the project complies with building regulations and to secure all necessary building warrants.
                        </li><li>Prepare a full design of the solar PV system (including electrical diagrams, module mounting system details etc.)</li>
                        <li>Approximate project initiation date and installation duration, highlighting any site access requirements that the owner needs to be aware of.</li>
                        <li>Risk Assessment of developing a solar PV scheme at the site(s), and how these risks are best mitigated.</li>
                   </ul> 
              </p>
              </br>
              </br>
              <p>
                  <h5><b>EPC (engineering, procurement and construction) Services</b></h5>  
              </p>
              <p>
                  The Solar pvt ltd provide all-inclusive Engineering, Procurement and Construction services across a range of roof surfaces including flat, inclined, RCC or metal sheets.  Derived after a planning and development process unique to each site, our expert engineers ensure the best quality standards through intensive management and utilization of resources. 
              </p> 
              <p>
                  Our stringent quality standards, coupled with close ties with our suppliers allow precise selection of every system component.  Allowing for more efficient and reliable solutions with secured long term savings.  All the equipment used,the photo-voltaic module, the solar charge controller, the solar inverter, batteries, MC4 connectors, Array Junction Box, Module Mounting Structure, solar cables, Lightning Arresters and the Weather Monitoring Systemare tested under strict conditions both individually and together as a unit to ensure a perfect fit and maximum system efficiency.
              </p>
              <p>
                  We monitor every step of the process personally, coordinating all construction phases and controlling the quality of installations. Post installation, we further operate and maintain the PV system as per the need of the hour, whilst enabling the costumer to avail government subsidies and tax benefits wherever applicable.
              </p> 
              </br>
              </br>
              <p>
                  <h5><b>Training</b></h5>  
              </p>
              <p>
                  Nationally Recognized Training Personnel.</br>
                  Recruited on a national scale, to yield a holistic training crew; the program is developed through the training sector for providing skills and knowledge to prepare individuals with on hand training and experience with acclimatization to the latest developments.  This innovative form of academic training makes the participant industry-ready and allows for him to reach his full potential.
              </p>
              <p>
                  Operations and Management Training</br>
                  This skills based course introduces you to the world of operations management and is useful to those who wish to learn and understand more about the role it plays in Green Building initiatives. Using an interactive presentation style, the lessons go through the role of operations management in both planning and implementation aspects of the aforementioned process. It also covers strategies used, such as capacity planning, facilities location planning, aggregate planning and scheduling, as well as inventory management techniques and quality management.    
              </p>
              <p>
                  Software Training</br>
                  Technology is the coming field of power and opportunity, keeping the same as our belief, this training course concentrates on providing the facilities and tools to expose young professionals to the possibilities and work trends prevalent in the industry and how the same can be utilized for fast, cost effective and innovative project development further specialized to suit every unique project site and its characteristics.    
              </p>
              <p>
                  Shadow Lay-out Training</br>
                  Extensive training is provided in order to enrich the student with scientific and geographical know-how in optimization of array lay-out and prevent reduction in the efficiency of layout design.  This allows for a more holistic and effective energy harnessing over longer durations of time, maximizing the output and drastically limiting resource wastage.
              </p> 
            </div>
        </div>


        <p>
              <h5><b>Projects Details</b></h5>  
            </p>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>S.NO</th>
        <th>Name</th>
        <th>Address</th>

        <th>Date</th>
      </tr>
    </thead>
    <tbody>
<?php 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
        echo "<tr><td>" . $row["id"]. "</td> <td>" . $row["owner_name"]. "</td><td>" . $row["address"]. "</td><td>". date_format(date_create($row["date"]),"d-m-Y"). "</td></tr>";
      
    
    }
}?>
    </tbody>
  </table>
      </div>
    </section>
    
    <?php include('footer.php'); ?>  