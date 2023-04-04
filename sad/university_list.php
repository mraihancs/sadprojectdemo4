<html>

<head>
    

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>

        $(document).ready(function () {

            $("#myInput").on("keyup", function () {

                var value = $(this).val().toLowerCase();

                $("#myTable tr").filter(function () {

                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)

                });

            });

        });

    </script>

    <style>
        *{
            margin: 0px;
            padding: 0px;
        }

        #myInput {

            background-color: white;
         
           
            background-position: 10px 10px;

            background-repeat: no-repeat;

            width: 100%;

            font-size: 16px;

            padding: 12px 20px 12px 40px;

            border: 1px solid #ddd;

            margin-bottom: 12px;

        }

 

        table {

            font-family: 'Times New Roman', Times, serif;

            border-collapse: collapse;
            font-weight: bold;

            width: 100%;

        }

 

        td, th {

            border: 1px solid black;
            border: 3px solid green;

            text-align: left;

            padding: 8px;

        }

 

        tr:nth-child(even) {

            background-color: #313028;
            color:white;
            font-weight: bold;

        }

        .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
 
  background-color: red;
  color: white;
  text-align: center;
}


    </style>

</head>

<body>
    

    <h2 style="text-align:center ; font-size: 40px;color: rgb(31, 31, 95);" >Public University List</h2><hr><br><br><br><br>

    <input  type="text" id="myInput" onkeyup="myFunction()"  placeholder="Search for University" title="Type University Name">

 

    <table  id="myTable">

        <tr style="font-weight: bold;" class="header">
            
            <th style="width: 60%;">Name</th>

            <th style="width: 40%;">Website</th>

        </tr>

        <tr>

            <td>University of Dhaka</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.du.ac.bd">www.du.ac.bd</a></td>

        </tr>

        <tr>

            <td>University of Rajshahi</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.ru.ac.bd">www.ru.ac.bd</a></td>

        </tr>

        <tr>

            <td>Bangladesh Agricultural University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.bau.edu.bd">www.bau.edu.bd</a></td>

        </tr>

        <tr>

            <td>Bangladesh University of Engineering & Technology</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.buet.ac.bd">www.buet.ac.bd</a></td>

        </tr>

        <tr>

            <td>University of Chittagong</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.cu.ac.bd">www.cu.ac.bd</a></td>

        </tr>

        <tr>

            <td>Jahangirnagar University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.juniv.edu">www.juniv.edu</a></td>

        </tr>

        <tr>

            <td>Islamic University, Bangladesh</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.iu.ac.bd">www.iu.ac.bd</a></td>

        </tr>

        <tr>

            <td>Shahjalal University of Science & Technology</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.sust.edu">www.sust.edu</a></td>

        </tr>

        <tr>

            <td>Khulna University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.ku.ac.bd">www.ku.ac.bd</a></td>

        </tr>

        <tr>

            <td>National University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.nu.edu.bd">	www.nu.edu.bd</a></td>

        </tr>


        <tr>

            <td>Bangladesh Open University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.bou.ac.bd">www.bou.ac.bd</a></td>

        </tr>

        <tr>

            <td>Bangabandhu Sheikh Mujib Medical University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.bsmmu.edu.bd">www.bsmmu.edu.bd</a></td>

        </tr>

        <tr>

            <td>Bangabandhu Sheikh Mujibur Rahman Agricultural University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.bsmrau.edu.bd">www.bsmrau.edu.bd</a></td>

        </tr>

        <tr>

            <td>Hajee Mohammad Danesh Science & Technology University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.hstu.ac.bd">www.hstu.ac.bd</a></td>

        </tr>

        <tr>

            <td>Mawlana Bhashani Science & Technology University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.mbstu.ac.bd">www.mbstu.ac.bd</a></td>

        </tr>

        <tr>

            <td>Patuakhali Science And Technology University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.pstu.ac.bd">www.pstu.ac.bd</a></td>

        </tr>

        <tr>

            <td>Sher-e-Bangla Agricultural University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.sau.edu.bd">www.sau.edu.bd</a></td>

        </tr>

        <tr>

            <td>Chittagong University of Engineering & Technology</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.cuet.ac.bd">www.cuet.ac.bd</a></td>

        </tr>

        <tr>

            <td>Rajshahi University of Engineering & Technology</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.ruet.ac.bd">www.ruet.ac.bd</a></td>

        </tr>

        <tr>

            <td>Khulna University of Engineering & Technology</td>

            <td><a style="text-decoration: none; color:black;" href="http://www.kuet.ac.bd">www.kuet.ac.bd</a></td>

        </tr>

        <tr>

            <td>Dhaka University of Engineering & Technology</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.duet.ac.bd">www.duet.ac.bd</a></td>

        </tr>

        <tr>

            <td>Noakhali Science & Technology University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.nstu.edu.bd">www.nstu.edu.bd</a></td>

        </tr>

        <tr>

            <td>Jagannath University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.jnu.ac.bd">www.jnu.ac.bd</a></td>

        </tr>

        <tr>

            <td>Comilla University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.cou.ac.bd">www.cou.ac.bd</a></td>

        </tr>

        <tr>

            <td>Jatiya Kabi Kazi Nazrul Islam University</td>

            <td><a style="text-decoration: none; color: white;" href="http://	www.jkkniu.edu.bd">	www.jkkniu.edu.bd</a></td>

        </tr>

        <tr>

            <td>Chittagong Veterinary and Animal Sciences University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.cvasu.ac.bd">www.cvasu.ac.bd</a></td>

        </tr>

        <tr>

            <td>Sylhet Agricultural University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.sau.ac.bd">www.sau.ac.bd</a></td>

        </tr>

        <tr>

            <td>Jessore University of Science & Technology</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.just.edu.bd">www.just.edu.bd</a></td>

        </tr>

        <tr>

            <td>Pabna University of Science and Technology</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.pust.ac.bd">www.pust.ac.bd</a></td>

        </tr>

        <tr>

            <td>Begum Rokeya University, Rangpur</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.brur.ac.bd">www.brur.ac.bd</a></td>

        </tr>

        <tr>

            <td>Bangladesh University of Professionals</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.bup.edu.bd">www.bup.edu.bd</a></td>

        </tr>

        <tr>

            <td>Bangabandhu Sheikh Mujibur Rahman Science & Technology University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.bsmrstu.edu.bd">www.bsmrstu.edu.bd</a></td>

        </tr>

        <tr>

            <td>Bangladesh University of Textilesh</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.butex.edu.bd">www.butex.edu.bd</a></td>

        </tr>

        <tr>

            <td>University of Barishal</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.bu.ac.bd">www.bu.ac.bd</a></td>

        </tr>

        <tr>

            <td>Rangamati Science and Technology University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.rmstu.edu.bd">www.rmstu.edu.bd</a></td>

        </tr>

        <tr>

            <td>Bangabandhu Sheikh Mujibur Rahman Maritime University, Bangladesh</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.bsmrmu.edu.bd">www.bsmrmu.edu.bd</a></td>

        </tr>

        <tr>

            <td>Islamic Arabic University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.iau.edu.bd">www.iau.edu.bd</a></td>

        </tr>

        <tr>

            <td>Chittagong Medical University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.cmu.edu.bd">www.cmu.edu.bd</a></td>

        </tr>

        <tr>

            <td>Rajshahi Medical University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.rmu.edu.bd">www.rmu.edu.bd</a></td>

        </tr>

        <tr>

            <td>Rabindra University, Bangladesh</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.rub.ac.bd">www.rub.ac.bd</a></td>

        </tr>

        <tr>

            <td>Bangabandhu Sheikh Mujibur Rahman Digital University, Bangladesh</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.bdu.ac.bd">www.bdu.ac.bd</a></td>

        </tr>

        <tr>

            <td>Sheikh Hasina University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.shubd.net">www.shubd.net</a></td>

        </tr>

        <tr>

            <td>Khulna Agricultural University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.kau.edu.bd">www.kau.edu.bd</a></td>

        </tr>

        <tr>

            <td>Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.bsfmstu.ac.bd/">www.bsfmstu.ac.bd/</a></td>

        </tr>

        <tr>

            <td>Sylhet Medical University</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.smu.edu.bd">www.smu.edu.bd</a></td>

        </tr>

        <tr>

            <td>Bangabandhu Sheikh Mujibur Rahman Aviation And Aerospace University (BSMRAAU)</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.bsmraau.edu.bd">www.bsmraau.edu.bd</a></td>

        </tr>

    
        <tr>

            <td>Bangabandhu Sheikh Mujibur Rahman University, Kishoreganj</td>

            <td><a style="text-decoration: none; color: white;" href="http://www.bsmru.ac.bd.">www.bsmru.ac.bd.</a></td>

        </tr>

        <tr>

            <td>Bangabandhu Sheikh Mujibur Rahman Science & Technology University, Pirojpur</td>

            <td><a style="text-decoration: none; color: black;" href="http://www.bsmrstup.ac.bd">www.bsmrstup.ac.bd</a></td>

        </tr>

        

    </table>

<br>
    <!--Footer here-->
    <div style="background-color: orangered;" class="footer">
        <p  style="text-align: center;color:aliceblue" >&copy;2023 Admission Service System | All Rights Reserved</p>
      </div>
</body>

</html>