<?php

/**
 * Class process
 * Class to process data entered and returned
 *
 */

class process {

    /**
     * @var
     * Private variable con to
     * initiate a new connection form the settings
     *
     */

    private $con;


    /**
     * process constructor.
     * Constructor function
     *
     */

    public function __construct($con)
    {
        $this -> db = $con;
    }


    /**
     * @param $query
     * @return mixed
     * Generic function to prepare queries
     *
     */

    public function runQuery($query)
    {
        $stmt = $this->db->prepare ( $query );
        
        return $stmt;
    }

    /**
     * @param $uname
     * @param $pwd
     * @return bool
     * Function to check if login credentials correct
     *
     */

    public function login ($uname, $pwd)
    {
        
        try {
            
            $stmt = self::runQuery( "SELECT * FROM ap_user WHERE ap_uname = :uname AND ap_pwd = :pwd" );

            $stmt->execute(array(':uname'=>$uname, ':pwd'=>$pwd));

            $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() > 0)
            {

                $_SESSION['user_session'] = $userRow['id'];

                return true;

            } else {

                return false;
            }
        } catch (PDOException $err)
        {
            echo $err->getMessge();
        }
    }


    /**
     * @return bool
     * Function to check if user is logged in
     */

    public function is_logged ()
    {
        if(isset($_SESSION['user_session']))
        {
            return true;

        }
    }


    /**
     * @param $url
     * Function to redirect user
     */

    public function redirect ($url)
    {
        header("location: $url");
    }


    /**
     * @return bool
     * function to logout user
     */

    public function logout ()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        return true;
    }




    /**
     * @param $csv_file
     * The CSV file should have a table with columns and rows already defined
     *
     */

    public function upload_csv ($csv_file)
    {
        //validation check
        //checking if file is .csv
        $extension = explode('.', $csv_file["name"]);
        $extension = array_pop($extension);

        if(strtolower($extension) == "csv") {


            if (($handle = fopen($csv_file["tmp_name"], "r")) !== FALSE) {
                fgetcsv($handle);
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    $num = count($data);
                    for ($c = 0; $c < $num; $c++) {
                        $col[$c] = $data[$c];
                    }

                    $col1 = $col[0];
                    $col2 = $col[1];
                    $col3 = $col[2];
                    $col4 = $col[3];
                    $col5 = $col[4];
                    $col6 = $col[5];
                    $col7 = $col[6];
                    $col8 = $col[7];

                    $dater = date('Y-m-d H:i:s');

// SQL Query to insert data into DataBase
                    $query = self::runQuery("INSERT INTO csv_tbl(dater, keyword, district, subcounty, county, market, amount, quantity, metric) VALUES(:dater, :col1, :col2, :col3, :col4, :col5, :col6, :col7, :col8)");

                    $query->bindValue(":dater", $dater);
                    $query->bindValue(":col1", $col1);
                    $query->bindValue(":col2", $col2);
                    $query->bindValue(":col3", $col3);
                    $query->bindValue(":col4", $col4);
                    $query->bindValue(":col5", $col5);
                    $query->bindValue(":col6", $col6);
                    $query->bindValue(":col7", $col7);
                    $query->bindValue(":col8", $col8);
                    $query->execute();
                }
                fclose($handle);
            }

            ?>

            <div class='alert alert-success col-md-9' style="border-radius: inherit; border-left:3px solid green;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong>
                <p>File Details were successfully recorded</p>
            </div>
            <?php

        }else {
            ?>
            <div class='alert alert-danger col-md-9' style="border-radius: inherit; border-left:3px solid red;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error! Wrong File!</strong>
                <p>File Not a .csv</p>
            </div>
            <?php
        }
    }




    public function dataview($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if($stmt->rowCount()>0)
        {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                ?>
                <tr>
                    <td><?php echo $row['dater']; ?></td>
                    <td><?php echo $row['keyword']; ?></td>
                    <td><?php echo $row['district']; ?></td>
                    <td><?php echo $row['subcounty']; ?></td>
                    <td><?php echo $row['county']; ?></td>
                    <td><?php echo $row['market']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                    <td><?php echo $row['metric']; ?></td>
                </tr>
                <?php
            }
        }
        else
        {
            ?>
            <tr>
                <td>No Post yet, make some posts</td>
            </tr>

            <?php
        }

    }



    public function dataviewpages($query)
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if($stmt->rowCount()>0)
        {
            while($row=$stmt->fetch(PDO::FETCH_ASSOC))
            {
                ?>
                <tr>
                    <td>&nbsp&nbsp<a href="edit-page.php?id=<?php echo $row['id']; ?>" class="post_title"><?php echo $row['post_title']; ?></a><p style="font-size:10px;">&nbsp&nbsp&nbsp<a href="post_edit.php?id=<?php echo$row['id'];?>">Edit</a> | <a href="comments.php?id=<?php echo$row['id']; ?>">Delete</a></p></td>
                    <td><?php echo $row['author']; ?></td>
                    <td> Published <br><?php echo $row['dater']; ?></td>
                </tr>
                <?php
            }
        }
        else
        {
            ?>
            <tr>
                <td>No Post yet, make some posts</td>
            </tr>

            <?php
        }

    }




    /*
     *
     * Function ()
     * For Paging*/

    public function paging($query,$records_per_page)
    {
        $starting_position=0;
        if(isset($_GET["page_no"]))
        {
            $starting_position=($_GET["page_no"]-1)*$records_per_page;
        }
        $query2=$query." limit $starting_position,$records_per_page";
        return $query2;
    }




    public function paginglink($query,$records_per_page)
    {

        $self = $_SERVER['PHP_SELF'];

        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $total_no_of_records = $stmt->rowCount();

        if($total_no_of_records > 0)
        {
            ?><tr><td colspan="3"><?php
                $total_no_of_pages=ceil($total_no_of_records/$records_per_page);
                $current_page=1;
                if(isset($_GET["page_no"]))
                {
                    $current_page=$_GET["page_no"];
                }
                if($current_page!=1)
                {
                    $previous =$current_page-1;
                    echo"<nav>
                        <ul class=\"pager\">";
                    echo "<li><a href='".$self."?page_no=1'>First</a></li>&nbsp;&nbsp;";
                    echo "<li><a href='".$self."?page_no=".$previous."'>Previous</a></li>&nbsp;&nbsp;";
                    echo"</ul>";
                    echo"</nav>";
                }
                for($i=1;$i<=$total_no_of_pages;$i++)
                {
                    if($i==$current_page)
                    {
                        //   echo "<strong><a href='".$self."?page_no=".$i."' style='color:red;text-decoration:none'>".$i."</a></strong>&nbsp;&nbsp;";
                    }
                    else
                    {
                        //  echo "<a href='".$self."?page_no=".$i."'>".$i."</a>&nbsp;&nbsp;";
                    }
                }
                if($current_page!=$total_no_of_pages)
                {
                    $next=$current_page+1;
                    ?>
                    <nav>
                        <ul class="pager">
                            <?php
                            echo "<li><a href='".$self."?page_no=".$next."'>Next</a></li>&nbsp;&nbsp;";
                            echo "<li><a href='".$self."?page_no=".$total_no_of_pages."'>Last</a></li>&nbsp;&nbsp;";
                            ?>
                        </ul>
                    </nav>
                    <?php

                }
                ?></td></tr><?php
        }
    }


    /**
     * @param $keyword
     * @param $district
     * @param $sc
     * @param $county
     * @param $marketname
     * @param $amt
     * @param $qty
     * @param $metric
     *
     */

    public function enter_data($keyword, $district, $sc, $county, $marketname, $amt, $qty, $metric)
    {
        $dater = date('Y-m-d H:i:s');
        try {
            //inserting data manually
            $stmt = self::runQuery( "INSERT INTO csv_tbl(dater, keyword, district, subcounty, county, market, amount, quantity, metric) VALUES(:dater, :keyword, :district, :subcounty, :county, :market, :amt, :qty, :metric )" );
            $stmt->bindValue("dater", $dater);
            $stmt->bindValue("keyword", $keyword);
            $stmt->bindValue("district", $district);
            $stmt->bindValue("subcounty", $sc);
            $stmt->bindValue("county", $county);
            $stmt->bindValue("market", $marketname);
            $stmt->bindValue("amt", $amt);
            $stmt->bindValue("qty", $qty);
            $stmt->bindValue("metric", $metric);
            $stmt->execute();
            ?>
            <div class='alert alert-success col-md-9' style="border-radius: inherit; border-left:3px solid green;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Success!</strong>
                <p>Information Saved Successfully</p>
            </div>
            <?php

        } catch (PDOException $err)
        {

            ?>
            <div class='alert alert-danger col-md-9' style="border-radius: inherit; border-left:3px solid red;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Error!</strong>
                <p><?php echo $err->getMessage(); ?></p>
                <small>Contact Admin to diagnose this error!</small>
            </div>
<?php

        }
        
    }

}