<html>
<head>
        <title>Household Questions</title>
</head>
<body>
        <h1>Household Survey questions</h1>

        <table>
          <th>
          </th>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getPregnantWomenCount') ?>">
                  <?php echo "Are You Pregnant"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getPregnancyCheckupVisitCount') ?>">
                  <?php echo "Visit anywhere for pregnancy checkup"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getFPMethodUsageCount') ?>">
                  <?php echo "Ever use FP Method"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getFPMethodCount') ?>">
                  <?php echo "Which FP Method used"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getCurrentFPMethodUsageCount') ?>">
                  <?php echo "Currently using FP Method"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getCurrentFPMethodCount') ?>">
                  <?php echo "Which FP Method currently using"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getSideEffectsCount') ?>">
                  <?php echo "Side effects faced"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getFPProviderVisitCount') ?>">
                  <?php echo "Visit any FP Provider"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getFPProviderVisitReason') ?>">
                  <?php echo "Reason for visiting FP Provider"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getInterestedFPMethodCount') ?>">
                  <?php echo "Want to use any FP Method"?>
              </a>
            </td>
          </tr>
          <tr>
            <td>
              <a href="<?php echo site_url('HouseholdController/getReasonNotInterestedCount') ?>">
                  <?php echo "Reason for not using FP Method"?>
              </a>
            </td>
          </tr>
        </table>
</body>
</html>