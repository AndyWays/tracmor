<?php
/*
 * Copyright (c)  2006, Universal Diagnostic Solutions, Inc. 
 *
 * This file is part of Tracmor.  
 *
 * Tracmor is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version. 
 *	
 * Tracmor is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tracmor; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

	include('../includes/header.inc.php');
	$this->RenderBegin();
?>
<!-- Begin Header Menu -->
<?php 
	$this->ctlHeaderMenu->Render();
?>
<!-- End Header Menu -->
<!-- Begin Shortcut Menu -->
<?php
	$this->ctlShortcutMenu->Render();
?>
<!-- End Shortcut Menu -->

		</td>
		<td>
			<img src="../images/empty.gif" width="10">
		</td>
		<td width="100%" valign="top">

	<div class="title">Receipts: <?php $this->lblHeaderReceipt->Render(); ?></div>
	<table class="datagrid" cellpadding="5" cellspacing="0" border="0" >
		<tr>
			<td class="record_header">
				<?php 
					$this->btnEdit->Render();
					$this->btnSave->RenderWithError();
					echo('&nbsp;');
					$this->btnDelete->RenderWithError();
					$this->btnCancel->RenderWithError();
				?>
			</td>
		</tr>
		<tr>
			<td>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td style="vertical-align:top;">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td colspan="2" class="record_subheader">Sender Information</td>
								</tr>
								<tr>
									<td class="record_field_name">Company:&nbsp;</td>
									<td class="record_field_value"><?php $this->lstFromCompany->RenderWithError();$this->lblFromCompany->Render(); ?>&nbsp;</td>
								</tr>
								<tr>
									<td class="record_field_name">Contact:&nbsp;</td>
									<td class="record_field_value"><?php $this->lstFromContact->RenderWithError();$this->lblFromContact->Render(); ?>&nbsp;</td>
								</tr>
							</table>
							<br class="item_divider" />
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td colspan="2" class="record_subheader">Recipient Information</td>
								</tr>
								<tr>
									<td class="record_field_name">Contact:&nbsp;</td>
									<td class="record_field_value"><?php $this->lstToContact->RenderWithError();$this->lblToContact->Render(); ?>&nbsp;</td>
								</tr>
								<tr>
									<td class="record_field_name">Address:&nbsp;</td>
									<td class="record_field_value"><?php $this->lstToAddress->RenderWithError();$this->lblToAddress->Render(); ?>&nbsp;</td>
								</tr>						
							</table>
						</td>
						<td style="width:16px">&nbsp;</td>
						<td style="vertical-align:top;">
							<table cellpadding="0" cellspacing="0">
								<tr>
									<td colspan="2" class="record_subheader">Receipt Information</td>
								</tr>								
								<tr>
									<td class="record_field_name">Note:&nbsp;</td>
									<td class="record_field_value"><?php $this->txtNote->RenderWithError();$this->pnlNote->Render(); ?>&nbsp;</td>
								</tr>									
								<tr>
									<td class="record_field_name">Date Due:&nbsp;</td>
									<td class="record_field_value"><?php $this->calDueDate->RenderWithError();$this->lblDueDate->Render(); ?>&nbsp;</td>
								</tr>
								<tr style="<?php if (!$this->blnEditMode) { echo('display:none'); } ?>">
									<td class="record_field_name">Date Received:&nbsp;</td>
									<td class="record_field_value"><?php $this->lblReceiptDate->Render(); ?>&nbsp;</td>
								</tr>										
							</table>
						</td>
					</tr>
				</table>				
			</td>
		</tr>
	</table>	
	<br class="item_divider" />
	<div class="title">Assets to Receive</div>
	<table>
		<tr>
			<td><?php $this->rblAssetType->RenderDesigned('DisplayName=false'); ?></td>
			<td></td>
		</tr>
		<tr>
			<td><?php $this->lstAssetModel->RenderDesigned(); ?></td>
			<td></td>
		</tr>
		<tr>
			<td><?php $this->txtNewAssetCode->RenderDesigned(); ?></td>
			<td><?php $this->btnAddAsset->Render(); ?></td>
		</tr>
		<tr>
			<td><?php $this->chkAutoGenerateAssetCode->RenderDesigned('DisplayName=false'); ?></td>
			<td></td>
		</tr>
	</table>
		<?php $this->dtgAssetTransact->RenderWithError(); ?>
		<br class="item_divider" />
	<div class="title">Inventory to Receive</div>	
	<table>
		<tr>
			<td><?php $this->txtNewInventoryModelCode->RenderDesigned(); ?></td>
			<td></td>
		</tr>
		<tr>
			<td><?php $this->txtQuantity->RenderDesigned(); ?></td>
			<td><?php $this->btnAddInventory->Render(); ?></td>
		</tr>
	</table>	
		<?php $this->dtgInventoryTransact->RenderWithError(); ?>
		<br class="item_divider" />

	<?php $this->RenderEnd() ?>
	<?php require_once('../includes/footer.inc.php'); ?>