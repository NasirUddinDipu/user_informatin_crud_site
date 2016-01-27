                </table>
            </form>
            <!--if isset user link in index page then view there.-->
            <?php if(isset($user_info_link)) { echo $user_info_link; } ?>
        </div>
            
    </body>
    
    <?php
    //if isset any $db connection then all the way to footer you can close that connection
    if(isset($db)){
        $db->disconnect();
    } 
    ?>
    
</html>