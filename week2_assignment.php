<?php  

    $voter = 18;
    $Voter_ward = 020;
    $pvc = false;

    if($voter == 18 && $Voter_ward == 020 && $pvc){
        echo "Voter is eligible to vote";
    }
    else if( $voter < 18) {
        echo "voter is too young to vote.";
    }
    else if( $Voter_ward != 020) {
        echo "voter can not vote in this ward.";
    }
    else if( !$pvc){
        echo "voter has no pvc.";

    }


?>