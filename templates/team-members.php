<?php echo "============== Teams members resource ============== " ?>

<?php
foreach ($org_team_membership as $key => $value) {
    foreach ($value as $member => $role) { ?>
        resource "github_team_membership" "team_<?= $key ?>_<?= $member ?>_membership" {
        team_id  = "${github_team.team_<?= $key ?>.id}"
        username = "<?= $member ?>"
        role     = "<?= $role ?>"
        }
    <?php }
} ?>

