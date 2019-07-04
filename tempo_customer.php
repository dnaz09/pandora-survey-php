<?php
                      require_once 'api/database/config.php';

                      $sql = $conn->query("SELECT * FROM customers");

                      if ($sql->num_rows > 0) {
                          while ($row = $sql->fetch_assoc()) { 
                          $id = $row['id'];
                            echo "
                                <tr>
                                    <td>".$row['branch'].' - ',$row['branch_code']."</td>
                                    <td>".$row['title'].' '.$row['firstname'].' '. $row['lastname']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['mobile']."</td>
                                    <td>".$row['birthday']."</td>
                                    <td class='text-center'>
                                      <form method='POST'>
                                        <a href='fetch_survey.php?id=$id' class='btn btn-dark btn-sm'>
                                          View Details
                                        </a>
                                      </form>
                                    </td>
                                </tr>  
                                ";
                          }
                      }

                      // else {
                      //     echo "<td class='text-center' colspan='7'>No data available in table</td>";
                      // }
                  ?>